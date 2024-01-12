FROM mysql:latest

# Copia el archivo SQL al directorio de inicialización
COPY kyoto.sql /docker-entrypoint-initdb.d/