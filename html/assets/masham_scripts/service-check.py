#!/usr/bin/env python
# -*- coding: utf-8 -*-
import sys

Servers = sys.argv[1]
Values = sys.argv[2]
#Servers = Servers.split(" ")
#Values = Values.split(" ")
def ServiceCheck(Servers, Values):
    Servers = Servers.split(" ")
    Values = Values.split(" ")                                            
                                            #.replace('[','').replace(']',''))
    for serv in Servers:
        serv = serv.replace('[','').replace(']','')
        for val in Values:
            val = val.replace('[','').replace(']','')
            print("Checking Service: {0} in Server: {1}\n".format(val, serv))
 


ServiceCheck(Servers,Values)



#from datetime import datetime
#conn = pymssql.connect(server= 'awgdb1\AWGSQL', user= 'p9540awg', password= 'Aa123456', database= 'awg')
#activedb = conn.cursor()
#
#def execute_query(query):
#    activedb.execute(query)
#
#query = "SELECT Server FROM self_build";
#execute_query(query);
#running = activedb.fetchone()[0];
