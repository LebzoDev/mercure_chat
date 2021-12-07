mercure_server:
	@echo "Compiling Mercure Server..."
	./mercure/mercure --jwt-key='votreMotCle' --addr='127.0.0.1:9000' --allow-anonymous=1 DEBUG=1 --cors-allowed-origins=*
