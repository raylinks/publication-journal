<div class="pdf-header"  
style="display: flex;
    padding-bottom:10px;
    justify-content: space-around;
    position: relative;
    z-index: 3;
    padding-top: 10px;">
		<div class="pdf-return-article" style=" max-width: 70%;
    overflow-x: hidden;
    text-overflow: ellipsis;">
			<a href="http://www.sapientiajournaluniuyo.com/index.php/sapientia/article/view/9" class="btn btn-text" style="padding: .5em 1em;
    border-radius: 0;
    border: 1px solid #757575;
    background: transparent;
    font-family: 'Fira Sans',sans-serif;
    border-color: transparent;
    font-weight: 400;
    color: #333;
    text-decoration: none;

">
				←
				<span class="sr-only">
											Return to Article Details
									</span>
									MARXISM AND SELF-OWNERSHIP: ASSESSING COHEN
							</a>
		</div>
				<div class="pdf-download-button" style="max-width: 30%;">
			<a href="{{url('file/download',$publication->id)}}" class="btn"  download=""  style="padding: .5em 1em;
    border-radius: 0;
    border: 1px solid #757575;
    background: transparent;
    font-family: 'Fira Sans',sans-serif;
font-weight: 400;
    color: #333;
    text-decoration: none;
font-weight: 400;
    color: #333;
    text-decoration: none;
    ont-size: 1rem;
text-align: center;
    vertical-align: middle;
    display: inline-block;
    ">


				<span class="label">
					Download
				</span>
			</a>
		</div>
	</div>
    <div id="pdfCanvasContainer" class="pdf-frame">
		<iframe src="/storage/image/{{ $publication->picture}}" width="100%" height="100%" style="min-height: 500px;" allowfullscreen="" webkitallowfullscreen="" _idm_frm_="6783"></iframe>
	</div>
