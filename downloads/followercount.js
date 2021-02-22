$.ajax({
    method: 'GET',
    url: 'https://www.instagram.com/imagio.hu/?__a=1'
}).then(function (response) {

    //followers
    $("#followercount").append(response.graphql.user.edge_followed_by.count-1);

    //following
    $("#followedcount").append(response.graphql.user.edge_follow.count);

    //post count (nincs jobb ötletem)
    var numItems = 0 + $('.gallery-item').length;
    $("#postcount").append(""+numItems+"");
});

