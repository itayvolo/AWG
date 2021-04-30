#!/bin/python
# -*- coding: utf-8 -*-
from datetime import datetime
conn = pymssql.connect(server= 'awgdb1\AWGSQL', user= 'p9540awg', password= 'Aa123456', database= 'awg')
activedb = conn.cursor()

def execute_query(query):
    activedb.execute(query)

query = "SELECT Server FROM self_build";
execute_query(query);
running = activedb.fetchone()[0];
