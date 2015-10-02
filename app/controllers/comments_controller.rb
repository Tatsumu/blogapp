class CommentsController < ApplicationController
	def create #createアクションを定義
		@post =  Post.find(params[:post_id])#変数postにpost_idで取得したPostのデータを代入
		@comment = @post.comments.create(comment_params)#commentにcommentを新規作成という命令を代入
		redirect_to post_path(@post.id)#post_path、つまり詳細画面が表示されるように
	end
	
	def destroy #destroyアクションを定義
		@comment = Comment.find(params[:id])#commentにidで取得したcommentを代入
		@comment.destroy #commetnを削除
		redirect_to post_path(params[:post_id])#詳細画面に戻る
	end	

	private #他からアクセスできなくなる

		def comment_params #comment_paramsメソッドを定義
			params[:comment].permit(:body)#commentの内容bodyを許可
		end


end
