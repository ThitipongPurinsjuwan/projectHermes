$(() => {
  // input test
  var query = window.location.search.substring(1);
  var vars = query.split("=");
  var ID = vars[1];
  var url =
    "http://localhost/hermes/api.php/ShowReservation/" + ID;
  // input test
  getjson(url);



  // code group 3
  var urlAPI = "http://localhost/hermes/api.php/addroom/" + ID;

  $.getJSON(urlAPI, {
    format: "json",
  })
    .done(function (data) {
      console.log(data);
      $("#fname1").val(data["0"]["resinfo_first_name"]);
      $("#lname1").val(data["0"]["resinfo_last_name"]);
      $("#tel1").val(data["0"]["resinfo_telno"]);
      $("#email1").val(data["0"]["resinfo_email"]);
    })
    .fail(function (jqxhr, testStatus, error) { });
  showRoom();
  //END code group 3

  // Code Group 5
  $("#a_move_room").click(function (e) {
    selectionLoad();
    $("#Room").text($("#display_room").text());
    $("#Type").text($("#display_roomtype").text());
    $("#Building").text($("#display_roombuilding").text());
    $("#View").text($("#display_roomviews").text());
    $("#Price").text($("#display_room_price").val());
    $("#Night").text($("#night_head").text());
    $("#Total_Price").text(parseInt($("#Price").text()) * parseInt($("#Night").text()));
    $('#select2').change(showNewRoom);
    $("#btnConfirm").click(saveRoom);
  });
  // End Code Group 5
});


function getjson(url) {
  $.getJSON(url, { format: "json" })
    .done(function (data) {

      // Display contact/agent
      $("#night_head").text(data[0]["ginfo_night"]);
      $("#display_check_inout").val(data[0]["ginfo_in"] + " - " + data[0]["ginfo_out"]);
      $("#display_id").val(data[0]["resinfo_id"]);
      $("#display_firstname").val(data[0]["resinfo_first_name"]);
      $("#display_lastname").val(data[0]["resinfo_last_name"]);
      $("#display_email").val(data[0]["resinfo_email"]);
      $("#display_telephone").val(data[0]["resinfo_telno"]);
      $("#display_note").val(data[0]["resinfo_comments"]);

      // Display detail reser
      $("#head_room_name").text(data[0]["rtype_eng"]);
      $("#head_guest_firstname").text(data[0]["ginfo_first_name"]);
      $("#head_guest_lastname").text(data[0]["ginfo_last_name"]);

      // Display detail reser room
      $("#display_room_price").val(data[0]["room_price"]);
      $("#display_room").text(data[0]["room_name"]);
      $("#display_roomtype").text(data[0]["rtype_eng"]);
      $("#display_roombuilding").text(data[0]["building_name"]);
      $("#display_roomviews").text(data[0]["rview_eng"]);

      // Display detail reser
      $("#display_guest_id").val(data[0]["ginfo_id"]);
      $("#display_guest_firstname").val(data[0]["ginfo_first_name"]);
      $("#display_guest_lastname").val(data[0]["ginfo_last_name"]);
      $("#display_guest_email").val(data[0]["ginfo_email"]);
      $("#display_guest_telephone").val(data[0]["ginfo_telno"]);
    })
    .fail(function (jqxhr, textStatus, error) {
      alert("fail");
    });
}


// function group 3
function showRoom() {
  var urlAPI = "http://localhost/hermes/api.php/room";
  $.getJSON(urlAPI, {
    format: "json",
  })
    .done(function (data) {
      console.log(data);
      var selectionObject = document.getElementById("select");
      for (var i = 0; i < data.length; i++) {
        var option = document.createElement("OPTION"),
          txt = document.createTextNode(data[i]["room_name"]);
        option.appendChild(txt);
        option.setAttribute("value", data[i]["room_id"]);
        select.insertBefore(option, select.lastChild);
      }
    })
    .fail(function (jqxhr, textStatus, error) { });
}
//End function group 3

// Function Group 5
function showNewRoom() {
  night = $("#Night").text();
  var idcheck = $("#select2").val();
  var urlAPI = "http://localhost/hermes/api.php/getNewRoom/" + idcheck;
  $.getJSON(urlAPI, { format: "json" })
    .done(function (data) {
      console.log(data);
      $("#Roomnew").text(data["0"]["room_name"]);
      $("#Typenew").text(data["0"]["rtype_eng"]);
      $("#Buildingnew").text(data["0"]["building_name"]);
      $("#Viewnew").text(data["0"]["rview_eng"]);
      $("#Pricenew").text(data["0"]["room_price"]);
      $("#Nightnew").text(night)
      $("#Total_Pricenew").text((data["0"]["room_price"]) * parseInt(night));
    })
    .fail(function (jqxhr, testStatus, error) { });
}
function selectionLoad() {
  var urlAPI = "http://localhost/hermes/api.php/getRoom";
  // /"+$("#ID").val();
  $.getJSON(urlAPI, {
    format: "json"
  })
    .done(function (data) {
      console.log(data);
      var selectionObject = document.getElementById("select2");
      for (var i = 0; i < data.length; i++) {
        var option = document.createElement("OPTION"),
          txt2 = document.createTextNode(data[i]['room_name']);
        option.appendChild(txt2);
        option.setAttribute("value", data[i]['room_id']);
        select2.insertBefore(option, select2.lastChild);
      }
    })
    .fail(function (jqxhr, textStatus, error) {
    })
}
function saveRoom() {
  var api_url = "http://localhost/hermes/api.php/updateRoom/";
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const key1 = urlParams.get('id');
  var key2 = $("#Room").text();
  var key3 = $("#select2").val();
  $.ajax({
    type: "POST",
    url: api_url + key1 + "/" + key2 + "/" + key3,

    success: function (result, status, xhr) {
      $('#modal_alert').modal('show');
      setTimeout(reload, 800);
    },
    error: function (xhr, status, error) {
      alert(
        api_url +
        "Result: " +
        status +
        " " +
        error +
        " " +
        xhr.status +
        " " +
        xhr.statusText
      );
    },
  });
};
// End Function Group 5