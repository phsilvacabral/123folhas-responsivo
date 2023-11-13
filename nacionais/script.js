const lista = [{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista aaaaaaaa aaaaaaaa aaaaaaaaaa aaaaa", placeName: "Tupi Paulista", description: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic eum, assumenda consequuntur esse quia ullam minima veritatis possimus voluptatibus officia dolor omnis dignissimos, recusandae ipsam sit, labore obcaecati. Nisi, soluta.", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" },
{ title: "Vá para Tupi Paulista", placeName: "Tupi Paulista", description: "Descubra o Brasil: Natureza exuberante, cultura vibrante e sustentabilidade em um só destino!", preco: 120.00, dificulty: "3", imgUrl: "../img_principais/logo.png", link: "https://biotrip.com.br/destino/petar-com-vale-das-ostras/" }]


function main() {
    for (let i = 0; i < 27; i++) {

        const boxesContainer = document.getElementsByClassName('caixas').item(i);
        for (let n = 0; n < lista.length; n++) {
            const objectDestination = lista[n]

            const createBoxElement = document.createElement('div')
            createBoxElement.classList.add('bordacaixas')
            boxesContainer.appendChild(createBoxElement)

            const aElement = document.createElement('a')
            aElement.setAttribute('href', objectDestination.link)
            aElement.classList.add('linkcaixa')
            createBoxElement.appendChild(aElement)

            const imgElement = document.createElement('img')
            imgElement.setAttribute('src', objectDestination.imgUrl)
            imgElement.setAttribute('alt', objectDestination.placeName)
            imgElement.classList.add('fotodentro')
            aElement.appendChild(imgElement)

            const lineBox = document.createElement('div')
            lineBox.classList.add('linha0')
            aElement.appendChild(lineBox)

            const emptyDiv = document.createElement('div');
            lineBox.appendChild(emptyDiv)

            const titleP = document.createElement('p');
            titleP.textContent = objectDestination.title;
            titleP.classList.add('titulocaixa');
            emptyDiv.appendChild(titleP);

            const placeP = document.createElement('p');
            placeP.textContent = objectDestination.placeName;
            placeP.classList.add('lugarcaixa');
            emptyDiv.appendChild(placeP);

            const descP = document.createElement('div');
            descP.classList.add('escritacaixa');
            emptyDiv.appendChild(descP)

            const descriptionP = document.createElement('p')
            descriptionP.textContent = objectDestination.description;
            descP.appendChild(descriptionP);

            const priceDificulty = document.createElement('div');
            priceDificulty.classList.add('secaoprecodificuldade');
            lineBox.appendChild(priceDificulty);

            const boxPrice = document.createElement('p');
            boxPrice.textContent = String("R$" + objectDestination.preco);
            boxPrice.classList.add('precocaixa');
            priceDificulty.appendChild(boxPrice);

            const boxDificulty = document.createElement('p');
            boxDificulty.textContent = String("Dificuldade: " + objectDestination.dificulty);
            boxDificulty.classList.add('dificuldadecaixa');
            priceDificulty.appendChild(boxDificulty);
        }
    }
}

main()