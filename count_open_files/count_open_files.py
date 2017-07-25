import datetime
import subprocess
import sys
import time


def lsof_count_for_user(user):
  lsof_output = subprocess.run(['sudo lsof -u {} | wc -l'.format(user)], shell=True, stdout=subprocess.PIPE)
  lsof_count = int(lsof_output.stdout.decode().strip())
  return lsof_count

sys.stdout.write('time\tdatetime\troot\timicrobe\tmongo\tmysql\tnginx\n')

while True:
  root_count = lsof_count_for_user('root')
  imicrobe_count = lsof_count_for_user('imicrobe')
  mongo_count = lsof_count_for_user('mongod')
  mysql_count = lsof_count_for_user('mysql')
  nginx_count = lsof_count_for_user('nginx')

  t = time.time()
  now = datetime.datetime.now()

  sys.stdout.write(
    '{}\t{}\t{}\n'.format(
      t,
      now.isoformat(sep=' '), 
      '\t'.join([str(i) for i in (root_count, imicrobe_count, mongo_count, mysql_count, nginx_count)])
    )
  )
  sys.stdout.flush()
  time.sleep(5)
