if (localStorage.getItem("id_venda")) {
    var idVenda = localStorage.getItem("id_venda");
} else {
    localStorage.setItem("id_venda", Math.random(1000 * 10));
}

const vendaForm = document.getElementById("venda-form");

const productForm = document.getElementById("item-product-form");

function fillProductFields(cod_barras) {
    getProductInfo(cod_barras);
}

async function getProductInfo(cod_barras) {
    try {
        const resposta = await fetch("/", {
            method: "GET",
            body: {
                codigo_barras: cod_barras,
            },
        });

        if (!resposta.ok) {
            throw new Error("Produto Não cadastrado!");
        }

        return resposta;
    } catch (erro) {
        console.error(erro);
    }
}

function renderNewVendaProduto() {
    console.log(productForm);
    const formData = new FormData(productForm);
    const data = Object.fromEntries(formData);
    console.log(data);
}

async function storeNewVendaProdutoOnDB(data) {
    try {
        const resposta = await fetch("/", {
            method: "POST",
            body: data,
        });

        if (!resposta.ok) {
            throw new Error("Erro ao enviar formulário");
        }

        alert("Formulário enviado com sucesso!");
    } catch (erro) {
        console.error(erro);
    }
}
