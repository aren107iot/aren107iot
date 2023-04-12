

Windows PowerShell
著作權 (C) Microsoft Corporation. 著作權所有，並
保留一切權利。

PS D:\aren_Git-3> git init
PS D:\aren_Git-3> git remote
PS D:\aren_Git-3> git remote -v
PS D:\aren_Git-3> git remote add second https://github.com/aren107iot/second-git.git
PS D:\aren_Git-3> git remote -v
second  https://github.com/aren107iot/second-git.git (fetch)
second  https://github.com/aren107iot/second-git.git (push)
PS D:\aren_Git-3> git branch
PS D:\aren_Git-3> git log
fatal: your current branch 'main' does not have any commits yet
PS D:\aren_Git-3> git status
On branch main

No commits yet

nothing to commit (create/copy files and use "git add" to track)
PS D:\aren_Git-3> git pull second main
remote: Enumerating objects: 6, done.
remote: Counting objects: 100% (6/6), done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 6 (delta 0), reused 3 (delta 0), pack-reused 0
Unpacking objects: 100% (6/6), 1.03 KiB | 42.00 KiB/s, done.
From https://github.com/aren107iot/second-git
 * branch            main       -> FETCH_HEAD
 * [new branch]      main       -> second/main
PS D:\aren_Git-3>




PS D:\aren_Git-3> git push help
fatal: 'help' does not appear to be a git repository
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.
PS D:\aren_Git-3>

<hr>

Windows PowerShell
著作權 (C) Microsoft Corporation. 著作權所有，並保留一切權利。

PS D:\aren_Git-2> git add .
fatal: not a git repository (or any of the parent directories): .git
PS D:\aren_Git-2> git log
fatal: not a git repository (or any of the parent directories): .git
PS D:\aren_Git-2> cd second-git
PS D:\aren_Git-2\second-git> git add .
PS D:\aren_Git-2\second-git> git commit -m "clone test>index.html"
[main 0388b5f] clone test>index.html
 1 file changed, 12 insertions(+)
 create mode 100644 index.html
PS D:\aren_Git-2\second-git> git remote
origin
PS D:\aren_Git-2\second-git> git push -u origin main
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 8 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 466 bytes | 466.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
To https://github.com/aren107iot/second-git.git
   42e0b34..0388b5f  main -> main
branch 'main' set up to track 'origin/main'.
PS D:\aren_Git-2\second-git>

<hr>

Windows PowerShell
著作權 (C) Microsoft Corporation. 著作權所有，並保留一切權利。

PS D:\aren_Git> cd ..
PS D:\> rmdir test

確認
位於 D:\test 的項目有子系，而且沒有指定 Recurse 參數。如果繼續進行，所有
[Y] 是(Y)  [A] 全部皆是(A)  [N] 否(N)  [L] 全部皆否(L)  [S] 暫停(S)  [?
rmdir : 無法移除 D:\test\.git\objects\06\5957b5d7a98740dd434a2351f7ede4
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (5957b5d7a98740dd434a23
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\06 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (06:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\39\970d682a3664d870b8e7ce413eca43
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (970d682a3664d870b8e7ce
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\39 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (39:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\3b\2be271600531e88625f026e130c6f7
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (2be271600531e88625f026
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\3b 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (3b:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\4d\5729ec707ce799f467e32ebc8d6bb7
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (5729ec707ce799f467e32e
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\4d 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (4d:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\56\efbdba61ff12f90f864930b9a85eac
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (efbdba61ff12f90f864930
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\56 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (56:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\58\93f6a6b9a5ae9e07c37576ddc0be45
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (93f6a6b9a5ae9e07c37576
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\58 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (58:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\7f\4709e94455b029ee72933dce31e517
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (4709e94455b029ee72933d
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\7f 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (7f:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\82\cbe8aedcaa1b19de0c57833608737f
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (cbe8aedcaa1b19de0c5783
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\82 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : WriteError: (82:DirectoryInfo) [Remove-It
    + FullyQualifiedErrorId : DirectoryNotEmpty,Microsoft.PowerShell.Co
 
rmdir : 無法移除 D:\test\.git\objects\90\06f945881e6a8d046450727ea64699
位於 線路:1 字元:1
+ rmdir test
+ ~~~~~~~~~~
    + CategoryInfo          : PermissionDenied: (06f945881e6a8d04645072
    + FullyQualifiedErrorId : RemoveFileSystemItemUnAuthorizedAccess,Mi
rmdir : 無法移除 D:\test\.git\objects\90 目錄，因為它不是空的。
位於 線路:1 字元:1
+ rmdir test