import glob
import os
import shutil

def generator(video_files):
	thumbs=glob.glob("Content\\thumbs\\*.*")
	for i in range(len(thumbs)):
		thumbs[i]=(thumbs[i])[15:-4]
	s1=set(thumbs)
	s2=set(video_files)
	if len(list(s1-s2)) != 0:
		#thumbnail making start here
		ls=list(s2-s1)
		for i in range(len(ls)):
			os.system("copy Content\\thumbs\\sample.jpg Content\\thumbs\\"+ls[i]+".jpg")
		
		#thumbnail making ends here
	return

video_files=glob.glob("Content/*.*")
for i in range(len(video_files)):
	video_files[i]=(video_files[i])[8:-4]
generator(video_files)