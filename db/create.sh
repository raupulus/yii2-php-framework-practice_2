#!/bin/sh

if [ "$1" = "travis" ]
then
    psql -U postgres -c "CREATE DATABASE practica2_yii2_test;"
    psql -U postgres -c "CREATE USER practica2_yii2 PASSWORD 'practica2_yii2' SUPERUSER;"
else
    [ "$1" != "test" ] && sudo -u postgres dropdb --if-exists practica2_yii2
    [ "$1" != "test" ] && sudo -u postgres dropdb --if-exists practica2_yii2_test
    [ "$1" != "test" ] && sudo -u postgres dropuser --if-exists practica2_yii2
    sudo -u postgres psql -c "CREATE USER practica2_yii2 PASSWORD 'practica2_yii2' SUPERUSER;"
    [ "$1" != "test" ] && sudo -u postgres createdb -O practica2_yii2 practica2_yii2
    sudo -u postgres createdb -O practica2_yii2 practica2_yii2_test
    LINE="localhost:5432:*:practica2_yii2:practica2_yii2"
    FILE=~/.pgpass
    if [ ! -f $FILE ]
    then
        touch $FILE
        chmod 600 $FILE
    fi
    if ! grep -qsF "$LINE" $FILE
    then
        echo "$LINE" >> $FILE
    fi
fi
