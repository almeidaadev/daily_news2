$(function () {
    var APIKEY = "4dc0e2bf817644268e4e8663046ef19e";
    var baseUrl = "https://newsapi.org/v2/everything?q=";

    function fetchNews(query) {
        var fullUrl = `${baseUrl}${query}&apiKey=${APIKEY}`;

        $.get(fullUrl, function (res) {
            if (res.status !== "ok") {
                console.log("Status code error: Status - " + res.status);
                return;
            }

            var articles = res.articles;

            // Clean Results

            $("#results").empty();

            articles.forEach((elements) => {
                // Create a div
                var newDiv = $('<div class="container"></div>');
                var leftDiv = $('<div class="container_left"></div>');
                var rightDiv = $('<div class="container_right"></div>');
                var contentRightDiv = $(
                    '<div class="content_right_div"></div>'
                );
                var infoRightDiv = $('<div class="info_right_div"></div>');
                // Create Child elements

                //

                var urlToImage = $(`<img src='${elements.urlToImage}'>`);
                leftDiv.append(urlToImage);

                //

                var title = $(`<h1>${elements.title}</h1>`);
                var content = $(`<span>${elements.content}</span>`);
                var description = $(`<p>${elements.description}</p>`);
                var url = $(
                    `<a target="_blank" href="${elements.url}">Click here to visit website</a> </br>`
                );
                var salvarArquivo = $("<a href='#'>Salvar Artigo</a>");

                var footerInfo = $(
                    `<p>Author: ${elements.author} | Date Published - ${elements.publishedAt} | Id: ${elements.source.id} - Name: ${elements.source.name}</p>x`
                );

                contentRightDiv.append(title, content, description, footerInfo);

                infoRightDiv.append(url, salvarArquivo);

                rightDiv.append(contentRightDiv, infoRightDiv);

                newDiv.append(leftDiv, rightDiv);

                $("#results").append(newDiv);
            });
        });
    }

    fetchNews("funny");

    $("button").on("click", function (e) {
        e.preventDefault();

        var inputValue = $("input").val().trim();

        if (inputValue !== "") {
            fetchNews(inputValue);
        }
    });
});
