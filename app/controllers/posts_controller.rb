class PostsController < ApplicationController

	before_action :set_project, only:[:show, :edit, :update, :destroy]#show,edit,update,destroyメソッドのみset_projectアクションを最初に行う

	def index#indexメソッドを定義
		@posts = Post.all#post一覧を表示
	end

	def show#show methodを定義
	end

	def new#new メソッドを定義
		@post = Post.new#postを追加
	end

	def create#createメソッドを定義
		@post =  Post.new(post_params)#postをpost_paramsで取得し作成
		if @post.save#postを保存した場合
			redirect_to posts_path#post一覧に戻る
		else#保存しなかった場合(validationに引っかかった場合)
			render 'new'#新規作成画面に戻る
		end
	end

	def edit#editメソッドを定義
	end

	def update#updateメソッドを定義
		if @post.update(post_params)#postを更新した場合
			redirect_to posts_path#post一覧に移動
		else#更新しなかった場合
			render 'edit'#編集画面に戻る
		end
	end

	def destroy#destroyメソッドを定義
		@post.destroy#postを削除
		redirect_to posts_path#post一覧に戻る
	end

	private#他から参照できなくなる

		def post_params#post_paramsを定義
			params[:post].permit(:title, :description)#postのtitle,descriptionを許可
		end

		def set_project#set_projectを定義
			@post = Post.find(params[:id])#idでpostを取得
		end
end

