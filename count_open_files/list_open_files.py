import datetime
import subprocess
import sys
import time


while True:
  t = time.time()
  now = datetime.datetime.now()

  imicrobe_files = subprocess.run(['sudo lsof -u imicrobe -u mysql'], shell=True, stdout=subprocess.PIPE)
  open_files = imicrobe_files.stdout.decode()

  sys.stdout.write('{}\t{}\n'.format(t, now.isoformat(sep=' ')))
  sys.stdout.write(open_files)
  sys.stdout.flush()
  time.sleep(60)
