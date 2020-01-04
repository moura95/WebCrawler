import requests
from bs4 import BeautifulSoup
from pprint import pprint


def makeSoup(url):
    html = requests.get(url).text
    soup = BeautifulSoup(html, 'html.parser')
    return soup


def getLink(soup):
    anchors = soup.findAll('a', {'class': 'tec--card__title__link'})

    links = []
    for anchor in anchors:
        links.append(anchor['href'])

    return links


def getText(soup):
    title = soup.h1.text.upper()
    paragraphs = soup.findAll('p')
    paragraphs = list(map(lambda p: p.text, paragraphs))
    paragraphs = '\n'.join(paragraphs)

    return [title, paragraphs]


# html = requests.get(url).text
# soup = BeautifulSoup(html)
# print(soup.body.div.text)

# soup.title == soup.find('title')


# main

def main():
    url = 'https://www.tecmundo.com.br/'

    soup = makeSoup(url)
    links = getLink(soup)

    data = []
    for link in links:
        soup = makeSoup(link)
        page_content = getText(soup)

        data.append(page_content)
    return data

# x = lambda elemento: elemento*2
# def x(elemento): return elemento*2

# lista = [1, 2, 3, 4, 5]
# lista_quadrado = []
# for numero in lista:
#     lista_quadrado.append(numero**2)
# lista = lista_quadrado

# quadrado = lambda x: x**2
# lista = [1, 2, 3, 4, 5]
# lista = list(map(quadrado, lista))
