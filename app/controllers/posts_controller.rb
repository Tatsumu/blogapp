class PostsController < ApplicationController

	before_action :set_project, only:[:show, :edit, :update, :destroy]

	def index
		@posts = Post.all
	end

	def show
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
	end

	def update
		if @post.update(project_params)
			redirect_to posts_path
		else
			render 'edit'
		end
	end

	def destroy
		@post.destroy
		redirect_to posts_path
	end

	private

		def project_params
			params[:post].permit(:title, :description)
		end

		def set_project
			@post = Post.find(params[:id])
		end
end

