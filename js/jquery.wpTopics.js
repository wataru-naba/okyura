$.getJSON( "news/wp-json/wp/v2/posts", function(results) {
	console.log(results)
		$.each(results, function(i, item) {
		
		if(i === 3){
			return false;
		}
		var date_data = new Date(item.date);
		var year = date_data.getFullYear();
		var month = date_data.getMonth() + 1;
		var day = date_data.getDate();
		var title = item.title.rendered;
		var link = item.link;
		var date = year + '年' + month + '月' + day + '日';
		$('.news-list').append(`<li><a href="${link}"><span class="date">${date}</span>${title}</a></li>`);
		});
	});
