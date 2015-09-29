class PostsController < ApplicationController
	def index
		@posts = Post.all
	end

	def show
		@post = Post.find(params[:id])
	end

	def new
		@post = Post.new
	end

	def create
		@post =  Post.new(project_params)
		if @post.save
			redirect_to posts_path
		else
			render 'new'
		end
	end

	def edit
		@post = Post.find(params[:id])
	end

	def update
		@post = Post.find(params[:id])
		if @post.update(project_params)
			redirect_to post_path
		else
			render 'edit'
		end
	end

	private

		def project_params
			params[:post].permit(:title, :description)
		end
end

