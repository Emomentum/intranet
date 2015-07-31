/**
 * @author Mangwels
 */
$(function(){
	$('.topics a').click(function(){
		var current = $(this).closest('div.topics');
		var current2 = $(this).closest('div.blog');
		var topic =current.find('input.topic_id').val();
		var topicid = parseInt(topic);
		var link = 'blog/getComments/'+topicid;
		var link2 = 'blog/addComment/'+topicid;
		$.ajax({
			url:link,
			type:"POST",
			datatype:"json",
			cache:false,
			data:{},
			success:function(result){
				var res = current2.find('.comments');
				res.empty();
				var res2 = current2.find('.comments .comments_holder')
				var result =JSON.parse(result);
				var topic_title = current.find('.topic_select').text();
				res.append("<h4 style = 'font-size:18px'>Topic : <u>"+topic_title+"</u><br/><br/>");
				 for (var i=0; i < result.length; i++) {
				  if(result[i].author != ""){
				  	var author = result[i].author;
				  	var date = result[i].date;
				    res.append(result[i].details+"<br>");
				    res.append("<p style='font-size:9px;margin: 10px 0 10px;'>Author : "+author +"\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted  : "+date+" ago<br><hr>")
				  }
				  else{
				  	res.append(result[i].details+"<br/><br/>");
				  }
				 };	
				  res.append('<textarea style = "width:89%;height:99px" name="comments" id = "comments" class = "newcomments"></textarea>'+'<br/><input type ="submit" value = "Add" id ="add_comments"/>')
				  $(function(){
						$('#add_comments').click(function(){
							var newcomment = $('.newcomments').val();
								 $.ajax({
									url:link2,
									type:"POST",
									datatype:"json",
									data:{"ncomments":newcomment},
									success:function(re){
										res2.append("<p>"+re+"</p>");
									}
										})
								return false;
													})
								})
				
			},
			error:function(msg){
				
			}
		})
		
		return false;
	})
})


