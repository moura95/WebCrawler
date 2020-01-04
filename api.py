from webscrapping import main
from fastapi import FastAPI

dados = main()



app = FastAPI()


@app.get("/")
def read_root():
    return {"Links": dados}
