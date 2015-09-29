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
		@post.save
		redirect_to posts_path
	end

	private

		def project_params
			params[:post].permit(:title, :description)
		end
end
