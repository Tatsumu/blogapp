class PostsController < ApplicationController

	before_action :set_project, only:[:show, :edit, :update, :destroy]#show,edit,update,destroyメソッドのみset_projectメソッドを最初に行う

	def index#indexクラスを定義
		@posts = Post.all#postテーブルから全てのレコードを取得
	end

	def show#showクラスを定義
	end

	def new#newクラスを定義
		@post = Post.new#postモデルを作成
	end

	def create#createクラスを定義
		@post =  Post.new(post_params)#post_paramsを受け取りモデルを作成
		if @post.save#postをデータベースに保存した場合
			redirect_to posts_path#post一覧に戻る
		else#保存しなかった場合(validationに引っかかった場合)
			render 'new'#add画面に戻る
		end
	end

	def edit#editクラスを定義
	end

	def update#updateクラスを定義
		if @post.update(post_params)#postを変更した場合
			redirect_to posts_path#post一覧に接続
		else#変更できなかった場合
			render 'edit'#編集画面に戻る
		end
	end

	def destroy#destroyクラスを定義
		@post.destroy#postを削除
		redirect_to posts_path#post一覧に戻る
	end

	private#他から参照できなくなる

		def post_params#post_paramsを定義
			params[:post].permit(:title, :description)#postのtitle,descriptionを許可してデータに保存できる状態にする
		end

		def set_project#set_projectを定義
			@post = Post.find(params[:id])#idでpostを取得
		end
end

