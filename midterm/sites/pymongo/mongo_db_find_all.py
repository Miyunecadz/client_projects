# import pymongo package
import pymongo

# instantiate the mongodb
client = pymongo.MongoClient("mongodb://localhost:27017/")

# database connection
mydb = client["mydatabase"]

# collection
collection = mydb['students']

for data in collection.find({}, {"_id":0, "name" : 1, "age": 1}):
    print(data)