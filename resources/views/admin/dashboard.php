<?php
$pageTitle = 'Admin Dashboard - Dean Tech';
include __DIR__ . '/../layouts/header.php';
?>

<div class="container mt-4">
    <h1 class="mb-4">Dashboard Overview</h1>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Services</h5>
                            <h2><?php echo htmlspecialchars($totalServices); ?></h2>
                        </div>
                        <i class="fas fa-cogs fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Projects</h5>
                            <h2><?php echo htmlspecialchars($totalProjects); ?></h2>
                        </div>
                        <i class="fas fa-project-diagram fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Messages</h5>
                            <h2><?php echo htmlspecialchars($totalMessages); ?></h2>
                        </div>
                        <i class="fas fa-envelope fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Clients</h5>
                            <h2><?php echo htmlspecialchars($totalClients); ?></h2>
                        </div>
                        <i class="fas fa-users fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Messages</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($recentMessages as $message): ?>
                        <div class="mb-3 pb-3 border-bottom">
                            <strong><?php echo htmlspecialchars($message->name); ?></strong> - <?php echo htmlspecialchars($message->subject ?? 'No Subject'); ?>
                            <br><small class="text-muted"><?php echo date('M d, Y', strtotime($message->created_at)); ?></small>
                        </div>
                    <?php endforeach; ?>
                    <a href="<?php echo $baseUrl; ?>/admin/messages" class="btn btn-sm btn-primary">View All Messages</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Projects</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($recentProjects as $project): ?>
                        <div class="mb-3 pb-3 border-bottom">
                            <strong><?php echo htmlspecialchars($project->title); ?></strong>
                            <br><small class="text-muted">Status: <?php echo ucfirst(htmlspecialchars($project->status)); ?>
                                <?php if ($project->client): ?>
                                    | Client: <?php echo htmlspecialchars($project->client->name); ?>
                                <?php endif; ?>
                            </small>
                        </div>
                    <?php endforeach; ?>
                    <a href="<?php echo $baseUrl; ?>/admin/projects" class="btn btn-sm btn-primary">View All Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
