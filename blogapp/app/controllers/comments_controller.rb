class CommentsController < ApplicationController
	def create #createメソッドを定義
		@post =  Post.find(params[:post_id])#データベースからfindで検索し、取得したpostのデータを変数postに代入
		@comment = @post.comments.create(comment_params)#postにcommentを追加する
		redirect_to post_path(@post.id)#post_path、つまりcomment一覧画面が表示されるように
	end
	
	def destroy #destroyメソッドを定義
		@comment = Comment.find(params[:id])#commentにidで取得したcommentを代入
		@comment.destroy #commetを削除
		redirect_to post_path(params[:post_id])#comment一覧画面に戻る
	end	

	private #他からアクセスできなくなる

		def comment_params #comment_paramsメソッドを定義
			params[:comment].permit(:body)#commentの内容bodyを許可データベースに保存
		end


end
