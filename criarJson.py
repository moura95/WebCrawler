import json

dicionario = {
    'cpf': 124578954,
    'telefone': 250316498,
    'algumaString': 'pato'
}

documento = json.dumps(dicionario)


# load, loads # json => dicionario
# dump, dumps # dicioario => json

arquivo = open('data.json', 'w')
arquivo.write(documento)
arquivo.close()