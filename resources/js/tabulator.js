import xlsx from "xlsx";
import feather from "feather-icons";
import Tabulator from "tabulator-tables";

(function(cash) {
    "use strict";

    // Tabulator
    if (cash("#tabulator").length) {
        // Setup Tabulator

        let id = document.getElementById("id_user").value;
        let api_key = document.getElementById("token_user").value;
        let table = new Tabulator("#tabulator", {
            pagination: 'local',
            height: "100%",
            ajaxURL: "../api/products/" + id + "?api_key=" + api_key,
            ajaxFiltering: false,
            ajaxSorting: false,
            printAsHtml: true,
            printStyled: true,
            layout: "fitColumns",
            paginationSize: 6,
            dataTree: true,
            paginationSizeSelector: [10, 20, 30, 40],
            placeholder: "No existen Post",
            responsiveLayout: 'collapse',
            responsiveLayoutCollapseStartOpen: false,
            resizableColumns: true,

            columns: [{
                    formatter: 'responsiveCollapse',
                    width: 40,
                    minWidth: 30,
                    align: 'center',
                    resizable: false,
                    headerSort: false
                },
                {
                    title: 'Nombre',
                    minWidth: 350,
                    responsive: 0,
                    field: 'name',
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-no-wrap">${cell.getData().name}</div>
                            <div class="text-gray-600 text-xs whitespace-no-wrap">${cell.getData().category['name']}</div>
                        </div>`
                    }
                },
                {
                    title: 'Categorias',
                    minWidth: 250,
                    responsive: 0,
                    field: 'category.name',
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    visible: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-no-wrap">${cell.getData().category['name']}</div>
                        </div>`
                    }
                },
                {
                    title: 'Imagen',
                    minWidth: 150,
                    field: 'image',
                    hozAlign: 'center',
                    responsive: 0,
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-center">
                            <div class="intro-x w-10 h-10 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/storage/${cell.getData().image['url']}">
                            </div>

                        </div>`
                    }
                },

                {
                    title: 'Precio',
                    minWidth: 100,
                    field: 'amount',
                    responsive: 0,
                    hozAlign: 'center',
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `
                            ${cell.getData().amount }
                         `
                    }
                },
                {
                    title: 'Stock',
                    minWidth: 50,
                    field: 'stock',
                    hozAlign: 'center',
                    responsive: 0,
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `
                             ${cell.getData().stock }
                         `
                    }
                },
                {
                    title: 'Status',
                    minWidth: 50,
                    field: 'status',
                    hozAlign: 'center',
                    responsive: 1,
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex items-center lg:justify-center ${cell.getData().status == 2 ? 'text-theme-9' : 'text-theme-6'}">
                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> ${cell.getData().status == 2 ? 'Activo' : 'Inactivo'}
                        </div>`
                    }
                },
                {
                    title: 'Etiquetas',
                    minWidth: 200,
                    responsive: 1,
                    field: 'tags.[].name',
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    cheese: true,
                    formatter(cell, formatterParams) {
                        var dt = '';

                        cell.getData().tags.forEach(d => {
                            dt += '<div> <div class="text-white whitespace-no-wrap bg-' + d.color + '-500 px-2 py-1 mr-2 mb-4 rounded-full"> ' + d.name + ' </div> </div>';



                        });

                        return dt;
                    }
                },

                {
                    title: 'Acciones',
                    minWidth: 200,
                    field: 'actions',
                    responsive: 1,
                    hozAlign: 'center',
                    vertAlign: 'middle',
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        var deletePostUri = cell.getData().slug;
                        console.log(deletePostUri);
                       
                        return `<div class="flex lg:justify-center items-center">
                            <a class="flex items-center mr-3" href="products/${cell.getData().slug}/edit">
                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="flex items-center text-theme-6" href="products/${cell.getData().slug}/destroy">
                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                            </a>
                        </div>`
                    }
                },

            ],
            ajaxResponse: function(url, params, response) {
                //url - the URL of the request
                //params - the parameters passed with the request
                //response - the JSON object returned in the body of the response.

                return response.data; //pass the data array into Tabulator
            },
            renderComplete() {
                feather.replace({
                    'stroke-width': 1.5
                })
            }

        });
        // Redraw table onresize
        window.addEventListener("resize", () => {
            table.redraw()
            feather.replace({
                'stroke-width': 1.5
            })
        })

        // Filter function
        function filterHTMLForm() {
            let field = cash('#tabulator-html-filter-field').val()
            let type = cash('#tabulator-html-filter-type').val()
            let value = cash('#tabulator-html-filter-value').val()


            table.setFilter(field, type, value)


        }

        // On submit filter form
        cash('#tabulator-html-filter-form')[0].addEventListener('keypress', function(event) {
            let keycode = (event.keyCode ? event.keyCode : event.which)
            if (keycode == '13') {
                event.preventDefault()
                filterHTMLForm()
            }
        })

        // On click go button
        cash('#tabulator-html-filter-go').on('click', function(event) {
            filterHTMLForm()
        })

        // On reset filter form
        cash('#tabulator-html-filter-reset').on('click', function(event) {
            cash('#tabulator-html-filter-field').val('name')
            cash('#tabulator-html-filter-type').val('like')
            cash('#tabulator-html-filter-value').val('')
            filterHTMLForm()
        })

        // Export
        cash('#tabulator-export-csv').on('click', function(event) {
            table.download('csv', 'data.csv')
        })

        cash('#tabulator-export-json').on('click', function(event) {
            table.download('json', 'data.json')
        })

        cash('#tabulator-export-xlsx').on('click', function(event) {
            window.XLSX = xlsx
            table.download('xlsx', 'data.xlsx', {
                sheetName: 'Products'
            })
        })

        cash('#tabulator-export-html').on('click', function(event) {
            table.download('html', 'data.html', {
                style: true
            })
        })

        // Print
        cash('#tabulator-print').on('click', function(event) {
            table.print()
        })
    }
})(cash)
