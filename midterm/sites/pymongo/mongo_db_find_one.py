# import pymongo package
import pymongo

# instantiate the mongodb
client = pymongo.MongoClient("mongodb://localhost:27017/")

# database connection
mydb = client["mydatabase"]

# collection
collection = mydb['students']


data = collection.find_one()


print(data['name'])