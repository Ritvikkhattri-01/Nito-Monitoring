
import pymysql
import sys
# Open database connection
def main():
    db = pymysql.connect("localhost","root","nito123","nito" )
    cursor = db.cursor()
    sql = "SELECT S_ID FROM phptopy \
      WHERE ID = (SELECT MAX(ID) FROM phptopy)"
    cursor.execute(sql)
    results = cursor.fetchone()
    results=results[0]
    db.close()
    return results

x=main()
