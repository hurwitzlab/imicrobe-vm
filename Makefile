lytic-rsync-dry-run:
	rsync -n -arvzP --delete --exclude-from=rsync.exclude -e "ssh -A -t jklynch@hpc.arizona.edu ssh -A -t lytic" ./ :project/imicrobe/imicrobe-vm

lytic-rsync:
	rsync -arvzP --delete --exclude-from=rsync.exclude -e "ssh -A -t jklynch@hpc.arizona.edu ssh -A -t lytic" ./ :project/imicrobe/imicrobe-vm
