# Use the official Nginx image from Docker Hub
FROM nginx:alpine

# Copy the current directory contents into the Nginx HTML directory
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
