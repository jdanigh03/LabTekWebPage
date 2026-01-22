FROM php:8.2-cli

WORKDIR /var/www/html

# Copiar archivos de la aplicación
COPY . .

# Exponer puerto dinámico
EXPOSE 8080

# Comando de inicio (Render sobrescribirá el puerto)
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8080} -t ."]