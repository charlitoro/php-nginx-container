$(document).ready(function () {
    $('#list').DataTable();
});

$(document).ready(function () {

    function dataAlbumForm (){
        return {
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
    }

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
                $('#album-delete').html(response);
                $('#modal-album-delete').modal('show');
            }
        })
    })

    $('.btn-album-create').click(function(){
        var id = $(this).data('id');
        $.ajax({
            url: "../platform/modals/create-album.php",
            data: { "id": id },
            type: "POST",
            cache: false,
        }).done(function (response) {
            if (response) {
                $('#album-create').html(response);
                $('#modal-album-create').modal('show');
            }
        })
    })

    $('.btn-create-collection').click(function(){
        $.ajax("../platform/modals/create-collection.php" )
        .done(function (response) {
            if (response) {
                $('#collect-create').html(response);
                $('#modal-create-collection').modal('show');
            }
        })
    })

    $('.btn-create-list').click(function(){
        $.ajax("../platform/modals/create-list.php" )
        .done(function (response) {
            if (response) {
                $('#collect-create').html(response);
                $('#modal-create-list').modal('show');
            }
        })
    })

    $('.btn-update').click(function () {
        var data = dataAlbumForm();
        $.post('../plugins/album/update.php', data, (response) => {
            if (response) {
                window.location = `../platform/collection.php?id=${response}`;
            }
        })
    })

    $('.btn-create').click(function () {
        var data = dataAlbumForm();
        $.post('../plugins/album/create.php', data, (response) => {
            if (response) {
                window.location = `../platform/collection.php?id=${response}`;
            }
        })
    })

    $('.btn-delete').click(function () {
        var data = { 
            albumId: $('#albumId').val(),
            collectionId: $('#collectionId').val() 
        };
        $.post('../plugins/album/delete.php', data, (response) => {
            if (response) {
                window.location = `../platform/collection.php?id=${response}`;
            }
        })
    })

    $('.btn-list-remove').click(function () {
        var id = $(this).data('id');
        $.ajax({
            url: "../platform/modals/remove-album.php",
            data: { "id": id },
            type: "POST",
            cache: false,
        }).done(function (response) {
            if (response) {
                $('#remove-album-on-list').html(response);
                $('#modal-album-remove').modal('show');
            }
        })
    })

    $('.btn-list-add').click(function () {
        var id = $(this).data('id');
        $.ajax( "../platform/modals/add-album.php" ).done(function (response) {
            if (response) {
                $('#add-album-on-list').html(response);
                $('#modal-album-add').modal('show');
            }
        })
    })

    $('.btn-remove').click(function () {
        var data = { 
            albumId: $('#albumId').val(),
        };
        $.post('../plugins/list/remove.php', data, (response) => {
            if (response) {
                window.location = `../platform/list.php?id=${response}`;
            }
        })
    })

    $('.btn-add').click(function () {
        var data = { albumId: $('#album').val() };
        $.post('../plugins/list/add.php', data, (response) => {
            if (response) {
                window.location = `../platform/list.php?id=${response}`;
            }
        })
    })
    
});