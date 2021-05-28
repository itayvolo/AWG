#!/usr/bin/env python
# -*- coding: utf-8 -*-
import sys

Servers = sys.argv[1]
Values = sys.argv[2]
#Servers = Servers.split(" ")
#Values = Values.split(" ")
def FSexplode(Servers, Values):
    Servers = Servers.split(" ")                              
                                            #.replace('[','').replace(']',''))
    for serv in Servers:
        serv = serv.replace('[','').replace(']','')
        print("Exploding FS in Server: '{0}', Destination-Path: '{1}'".format(serv,Values))
 


FSexplode(Servers,Values)