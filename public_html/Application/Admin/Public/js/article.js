$(function(){
	$("#articleForm").validation({
		cid: {
			 rule: {
				 required: true
			 },
			 error: {
		         required: "不能为空 "
		     },
		     message: "请选择分类",
		     success: "分类正确"
		 },
		 title: {
			 rule: {
				 maxlen:40,
				 required: true
			 },
			 error: {
				 maxlen: "不能大于40个字符 ",
		         required: "不能为空 "
		     },
		     message: "标题长度 1到 40 位 ",
		     success: "标题正确"
		 },
		 // subtitle:{
			//  rule: {
			// 	 maxlen:40,
			// 	 required: true
			//  },
			//  error: {
			// 	 maxlen: "不能大于40个字符 ",
		 //         required: "不能为空 "
		 //     },
		 //     message: "分类标题长度 1到 40 位 ",
		 //     success: "分类标题正确"
		 // },
		 
		 
	})
})
