#!/bin/bash

# Start Apache in the background
apache2-foreground &

# Wait for Apache to start (optional, depending on commands)
sleep 10

# Run your additional commands here
php artisan migrate
npm install
RUN npm run build

# Keep the container running (foreground process)
wait
