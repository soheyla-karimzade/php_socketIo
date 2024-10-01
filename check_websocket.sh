#!/bin/bash

HOST="localhost"
PORT=3000
TIMEOUT=5

echo "Checking WebSocket server at ws://${HOST}:${PORT}..."

nc -zv -w $TIMEOUT $HOST $PORT

if [ $? -eq 0 ]; then
  echo "WebSocket server is running and reachable at ws://${HOST}:${PORT}"
else
  echo "WebSocket server is not reachable at ws://${HOST}:${PORT}"
fi
