

if [ "$MYPROJECTNAME" != "$MYMASTERPROJECTNAME" ]; then    
    rm -rf "$MYPROJECTPATH"/public/tmp/*
    rsync -arvz "$MYPROJECTPATH" "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME":"$MYREMOTEPROJECTPATH"
    rsync -arvz --delete "$MYPROJECTPATH"/apps/data/scripts/ "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME":"$MYREMOTEPROJECTPATH"/apps/data/scripts/
    ssh "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME" 'bash '$MYREMOTEPROJECTPATH'/apps/data/scripts/b2badmin_basescript.bash -p '$MYPROJECTNAME' -m live_to_remote_server_update'
fi