


mydbexportpath="$myappspath"data/dbexport/
mkdir -p "$mydbexportpath"
mkdir -p "$mydbexportpath"live

export PGPASSWORD="$LOCALPGPASSWORD";
pg_dump -U postgres -d $MYDB -n "$MYSCHEMA" > "$mydbexportpath""$MYSCHEMA".sql
tar -zcf "$mydbexportpath""$MYSCHEMA".sql.tar.gz -C "$mydbexportpath" "$MYSCHEMA".sql
rm -f "$mydbexportpath""$MYSCHEMA".sql
export PGPASSWORD="$REMOTEPGPASSWORD";

if [ "$MYPROJECTNAME" != "$MYMASTERPROJECTNAME" ]; then
    rm -rf "$MYPROJECTPATH"/public/tmp/*
    rsync -arvz "$MYPROJECTPATH" "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME":"$MYREMOTEPROJECTPATH"
    rsync -arvz --delete "$MYPROJECTPATH"/apps/data/scripts/ "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME":"$MYREMOTEPROJECTPATH"/apps/data/scripts/
    #remotecmd=
    ssh "$LINUXREMOTEUSER"@"$LINUXSERVERIPORNAME" 'bash '$MYREMOTEPROJECTPATH'/apps/data/scripts/b2badmin_basescript.bash -p '$MYPROJECTNAME' -m live_to_remote_server'
#    ssh root@telecon-vps1 'bash /usr/share/pp/gym/data/ScriptsFromBash/gym_ppschema_ppuser/b2badminbasescript_live.bash'
fi