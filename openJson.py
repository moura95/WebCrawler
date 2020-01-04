import json 

arquivo = open('data.json', 'r')

print(json.load(arquivo))