import os
import time
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

class WatchHandler(FileSystemEventHandler):
    def on_modified(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.py'):
            print(f"Detected modification in {event.src_path}")
            os.system("docker-compose restart chat")

    def on_created(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.py'):
            print(f"Detected creation of {event.src_path}")
            os.system("docker-compose restart chat")

    def on_deleted(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.py'):
            print(f"Detected deletion of {event.src_path}")
            os.system("docker-compose restart chat")

    def on_modified(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.env'):
            print(f"Detected modification in {event.src_path}")
            os.system("docker-compose restart chat")

    def on_created(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.env'):
            print(f"Detected creation of {event.src_path}")
            os.system("docker-compose restart chat")

    def on_deleted(self, event):
        if event.is_directory:
            return None
        elif event.src_path.endswith('.env'):
            print(f"Detected deletion of {event.src_path}")
            os.system("docker-compose restart chat")

if __name__ == "__main__":
    path = './chat'  # Adjust path to match your Docker Compose service name
    event_handler = WatchHandler()
    observer = Observer()
    observer.schedule(event_handler, path, recursive=True)
    observer.start()
    try:
        print("Watching for changes...")
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        observer.stop()
    observer.join()
