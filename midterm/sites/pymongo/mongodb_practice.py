# Import pymongo Package
import pymongo

# Instantiate pymongo connection
client = pymongo.MongoClient("mongodb://localhost:27017/")

# Connection database
dbname = client["example_database"]

# select collection
dbcollection = dbname["students"]

# Our data
# docs = { "name" : "John Doe", "address": "SLSU", "age": 24, "gender": "male" }

# mydatas = [
#     {"name" : "James Flores", "address" : "Bontoc", "age": 30, "gender" : "male"},
#     {"name" : "June Vic" , "address" : "Somewhere", "age": 22, "lastname" : "Cadayona"}
# ]

# dbcollection.insert_many(mydatas)

# dataToFind = {"name": {"$regex": "^J"}}

# dataToDelete = { "name" : "Une Vic" }

# dbcollection.delete_one(data)

for data in dbcollection.find().sort("address"):
    print(data)