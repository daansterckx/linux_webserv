from fastapi import FastAPI
import socket
import os

app = FastAPI()

# Endpoint to get your name
@app.get("/name")
def get_name():
    return {"name": "Daan Sterckx"}

# Endpoint to get the container ID
@app.get("/container-id")
def get_container_id():
    container_id = socket.gethostname()
    return {"container_id": container_id}