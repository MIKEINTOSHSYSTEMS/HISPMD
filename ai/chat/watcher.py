import os
import time
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

class WatchHandler(FileSystemEventHandler):
    def handle_event(self, event, action):
        if event.is_directory:
            return None
        if event.src_path.endswith(('.py', '.env')):
            print(f"Detected {action} of {event.src_path}")
            #os.system("docker-compose -f /ai/docker-compose.yml restart hispmd_chatbot")
            #os.system("docker-compose -f restart hispmd_chatbot")
            os.system("docker-compose restart hispmd_chatbot")

    def on_modified(self, event):
        self.handle_event(event, "modification")

    def on_created(self, event):
        self.handle_event(event, "creation")

    def on_deleted(self, event):
        self.handle_event(event, "deletion")

if __name__ == "__main__":
    #path = './chat'  # Full or relative path to the chat folder
    path = '.'  # Full or relative path to the chat folder
    event_handler = WatchHandler()
    observer = Observer()
    observer.schedule(event_handler, path, recursive=True)
    observer.start()
    try:
        #print("Watching for changes in '/ai/chat'...")
        print("Watching for changes in './chat'...")
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        observer.stop()
    observer.join()
