function mdpConfirm() {
    if (document.getElementById("mdp").value != document.getElementById("mdpc").value) {
        document.getElementById("mdpc").setCustomValidity("Les mots de passes ne correspondent pas.");
    }
    else {
        document.getElementById("mdpc").setCustomValidity('');
    }
};

$(document).ready(function () {
    var table = $('#userList').DataTable({
        dom: 'lBfrtip',
        select: 'single',
        "columnDefs": [
            {
                "classname": 'id',
                "targets": [0],
                "visible": false,
                "searchable": false
            },
        ],
        buttons: [
            {
                text: 'Ajouter un utilisateur',
                action: function (e, dt, node, config) {
                    window.location.href = ('?action=AjouterU')
                }
            },
            {
                extend: 'selectedSingle',
                text: "Modifier l'utilisateur",
                action: function (e, dt, node, config) {
                    var id = table.row({ selected: true }).data()[0];
                    window.location.href = ('?action=ModifierU?id=' + id)
                }
            },
            {
                extend: 'selectedSingle',
                text: "Supprimer l'utilisateur",
                action: function (e, dt, node, config) {
                    var id = table.row({ selected: true }).data()[0];
                    $.ajax({
                        url: '?action=SupprimerU',
                        data: 'idDelete=' + id,
                        type: 'POST'
                    })
                }
            },
            {
                extend: 'selectNone',
                text: 'Déséléctionner'
            }
        ],
        language: {
            processing: "Traitement en cours...",
            search: "Rechercher&nbsp;:",
            lengthMenu: "Afficher _MENU_ enregistrements",
            info: "Affichage des enregistrements _START_ &agrave; _END_ sur _TOTAL_",
            infoEmpty: "Affichage de l'enregistrement 0 &agrave; 0 sur 0 enregistrement",
            infoFiltered: "(filtr&eacute; de _MAX_ enregistrements au total)",
            infoPostFix: "",
            loadingRecords: "Chargement en cours...",
            zeroRecords: "Aucun enregistrement &agrave; afficher",
            emptyTable: "Aucun enregistrement disponible",
            paginate: {
                first: "Premier",
                previous: "Pr&eacute;c&eacute;dent",
                next: "Suivant",
                last: "Dernier"
            },
            aria: {
                sortAscending: ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    })
});