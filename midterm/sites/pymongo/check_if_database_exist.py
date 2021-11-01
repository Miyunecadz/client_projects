# import pymongo package
import pymongo

# instantiate the mongodb
client = pymongo.MongoClient("mongodb://localhost:27017")


dblist = client.list_database_names()
dbname = "mydatabase"

if dbname in dblist:
    print("The database exist")
else:
    print("The database doesn't exist")

