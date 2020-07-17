$(document).ready(function () {
    $('#list').DataTable();
});

$(document).ready(function () {
    $('.btn-album-edit').click(function () {
        var id = $(this).data('id');
        $.ajax({
            url: "../platform/modals/edit-album.php",
            data: { "id": id },
            type: "POST",
            cache: false,
        }).done(function (response) {
            if (response) {
                $('#album-edit').html(response);
                $('#modal-album-edit').modal('show');
            }
        })
    })

    $('.btn-album-delete').click(function () {
        var id = $(this).data('id');
        $.ajax({
            url: "../platform/modals/delete-album.php",
            data: { "id": id },
            type: "POST",
            cache: false,
        }).done(function (response) {
            if (response) {
                console.log(response);
                $('#album-delete').html(response);
                $('#modal-album-delete').modal('show');
            }
        })
    })

    $('.btn-update').click(function () {
        var data = {
            title: $('#title').val(),
            label: $('#label').val(),
            artist: $('#artist').val(),
            format: $('#format').val(),
            genre: $('#genre').val(),
            country: $('#country').val(),
            released: $('#released').val(),
            status: $('#status').val(),
            albumId: $('#albumId').val(),
            collectionId: $('#collectionId').val()
        }
        console.log( data );
        $.post('../plugins/album/update.php', data, (response) => {
            if (response) {
                console.log(response);
                window.location = `../platform/collection.php?id=${response}`;
            }
        })
    })
});