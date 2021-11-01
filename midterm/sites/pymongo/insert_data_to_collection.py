# import pymongo package
import pymongo

# instantiate the mongodb
client = pymongo.MongoClient("mongodb://localhost:27017/")

# database connection
mydb = client["mydatabase"]

# collection
collection = mydb['students']

# document
mydoc1 = { "name": "John Doe", "address" : "SLSU" , "age" : 24 }

# insert data to collection
dbData1 = collection.insert_one(mydoc1)

# display generated ID of inserted data
print(dbData1.inserted_id)


# document
mydoc2 = { "name": "June Vic", "address" : "SLSU" , "age" : 22 }

# insert data to collection
dbData2 = collection.insert_one(mydoc2)

# display generated ID of inserted data
print(dbData2.inserted_id)


