#!/bin/bash

A=$[ $RANDOM % 9]

B=$[ $RANDOM % 9]
C=$[ $RANDOM % 9]

D=$[ $RANDOM % 9]
E=$[ $RANDOM % 9]
F=$[ $RANDOM % 9]

G=$[ $RANDOM % 9]

H=$[ $RANDOM % 9]
I=$[ $RANDOM % 9]
J=$[ $RANDOM % 9]
K=$[ $RANDOM % 9]

L=$[ $RANDOM % 9]

F=$[ $RANDOM % 9]


subscript=$[ $RANDOM % 100 + 500]
for (( p = 0 ;  p <= subscript;  p++  ))
do

K=$[ $RANDOM % 9]

echo $K | openssl dgst -md5 | cut -d = -f2 | sed 's/ //g' >> hashes/$A$B$C$D$E$F$G$H$I$J$F$L".txt"


done