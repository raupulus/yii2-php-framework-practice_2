#!/bin/sh

BASE_DIR=$(dirname $(readlink -f "$0"))
if [ "$1" != "test" ]
then
    psql -h localhost -U practica2_yii2 -d practica2_yii2 < $BASE_DIR/practica2_yii2.sql
fi
psql -h localhost -U practica2_yii2 -d practica2_yii2_test < $BASE_DIR/practica2_yii2.sql
