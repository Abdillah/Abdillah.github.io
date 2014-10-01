#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/socket.h>
#include <bluetooth/bluetooth.h>
#include <bluetooth/hci.h>
#include <bluetooth/hci_lib.h>

int main(int argc, char* argv[])
{
	// An arr. of struct, later, contains devices data
	inquiry_info* devices = NULL;
	int max_rsp, num_rsp;
	int adapter_id, sock, len, flags;
	int i;
	// Temp variable to hold each addr and name of device
	char addr[19] = {0};
	char name[248] = {0};

	// Open bluetooth gate (to external env), and connect the socket
	adapter_id = hci_get_route(NULL);
	sock = hci_open_dev(adapter_id);
	if(adapter_id < 0 || sock < 0) {
		perror("opening socket");
		exit(1);
	}
	
	len = 8;
	max_rsp = 255;
	flags = IREQ_CACHE_FLUSH;
	devices = (inquiry_info*) malloc(max_rsp * sizeof(inquiry_info));
	
	// num_rsp: the number of remote device detected
	num_rsp = hci_inquiry(adapter_id, len, max_rsp, NULL, &devices, flags);
	if(num_rsp < 0) {
		perror("hci_inquiry");
	}
	
	for(i = 0; i < num_rsp; i++) {
		/*
		 * Convert struct bdaddr_t (contains only uchar[6]) into hexadec string.
		 * Other func, str2ba() do otherwise.
		 */
		ba2str(&(devices+i)->bdaddr, addr);
		memset(name, 0, sizeof(name));
		// See "not equal" (!=) comparison
		if(hci_read_remote_name(sock, &(devices+i)->bdaddr, sizeof(name), 
		                        name, 0) != 0) {
			strcpy(name, "[unknown]");
		}
		// Print device found
		printf("%s %s\n", addr, name);
	}
	
	free(devices);
	close(sock);
	
	return 0;
}
